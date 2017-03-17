<?php
/**
 * Pdf帳票作成コントローラー
 *
 * @package  app
 * @extends  Controller_Base
 */
class Controller_Pdf extends Controller_Base
{

	/**
	 * Top page of the site
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
	}

	/**
	 * PDF帳票作成サンプル
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_sample() {
		if (Input::method() == 'POST') {
			$name = Input::post('name');
			$amount = Input::post('amount');
			$reason = Input::post('reason');

			$pdf = new FPDI();
			$pdf->setPrintHeader( false );
			$pdf->setPrintFooter( false );
			$pdf->AddPage();
			$pdf->setSourceFile( DOCROOT . 'files/pdf_templates/test.pdf' );
			$index = $pdf->importPage( 1 );
			$pdf->useTemplate( $index );
			
			// ここのあたりから動的に出力される処理を書きます。
			$pdf->SetFont("kozminproregular", "", 12);  // 日本語フォント

			//$pdf->Write( 0, 'TEST' );
			//$pdf->Text(50, 100, "ポケモンゲットだぜ！！");

			$pdf->Text(20, 42, $name);
			$pdf->Text(60, 59, $amount);
			$pdf->Text(66, 71.5, $reason);

			//$pdf->Output('test.pdf', 'I');
			return $this->_pdfRresponse('領収書.pdf', $pdf->Output('tmp.pdf', 'S'));
		}

		$this->template->title = "PDF作成サンプル";
		$this->template->content = View::forge('pdf/sample');
	}

	private function _pdfRresponse($filename, $body, $disposition = 'inline') {

		$this->template = null;

		$response = new Response();
		$response->set_header('Content-Type', 'application/pdf; charset=utf-8');
		$response->set_header('Content-Disposition', $disposition.'; filename='.$filename);

		$response->body($body);
		return $response;
	}

}
