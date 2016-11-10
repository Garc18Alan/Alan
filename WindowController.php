<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class WindowController extends controller
{
	/**
	 * @Route("/pagina1", name="window1")
	 */
	public function indexAction(Request $request)
	{

		$nome = $request->request->get('nome');
		$senha = $request->request->get('senha');

		if($nome == 'Alan' && $senha == 'alan123')
		{
			return $this->redirectToRoute('home_page', array('request' => $request), 307);
		}

		return $this->render('pagina1/window2.html.php', array());
	}

	/**
	 * @Route("/pagina1/window1", name="home_page")
	 */
	public function homeAction()
	{
		
		$request = Request::createFromGlobals();
		$nome = $request->request->get('nome');
		$senha = $request->request->get('senha');
		
		//return $this->render('pagina1/window2.html.php', array());
		return $this->render('pagina1/window1.html.php', array("nome"=>$nome, "senha"=>$senha));
	}

	/**
	 * @Route("/pagina1/window2/detalhe", name="pagina1_detalhe")
	 */
	public function detalheAction()
	{
		
		$req = Request::createFromGlobals();
		$id = $req->query->get('id');

		return new Response("Detalhes: ".$id);
	}

	/**
	 * @Route("/pagina1/show/{page}", name="show_post", defaults={"page"=1}, requirements={"page"="\d+"})
	 */
	public function showAction($page)
	{

		return new Response("Detalhes: ".$page);
	}
}

?>
