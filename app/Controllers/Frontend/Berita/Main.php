<?php namespace App\Controllers\Frontend\Berita;
use App\Controllers\FrontendController;
use App\Models\Konten\BeritaModel;

class Main extends FrontendController
{
	public $path_view 	= "frontend/berita/";
	public $theme		= "pages/theme-frontend/render";

	public function __construct()
	{
		$this->BeritaModel 	= new BeritaModel();
	}

	public function index($slug="")
	{
		$berita	= $this->BeritaModel->get(['slug'=>$slug]);
        if(empty($berita))
        {
            return redirect()->to(base_url().'/403');
        }
        $data['berita'] = $berita[0];
        $data['lain']   = $this->BeritaModel->get();
		$param['page'] 	= view($this->path_view.'page-index',$data);
		return view($this->theme, $param);
	}
}