<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
;


class PageController extends Controller {


	public function index(){
		$page = Page::whereSlug('welcome')->first();

		return view('welcome', compact('page'));
	}

	public function show( Page $page ) {
		if ( $page->isInactive() ) {
			\Voyager::canOrAbort( 'read_pages', 404 );
		}

		/*\Breadcrumbs::add( $page->title );
		\SEO::opengraph()->addImage( Voyager::image( $page->image ) );
		\SEO::opengraph()->setTitle( $page->title . ' - ' . config( 'app.name' ) );
		\SEO::opengraph()->setDescription( $page->meta_description );
		\SEO::metatags()->setKeywords( explode( ',', $page->meta_keywords ) );
		\SEO::metatags()->setDescription( $page->meta_description );*/

		return view( 'page-default', compact( 'page' ) );
	}

	public function skills() {
		$file = base_path( '_external/SkillTree.xml' );
		$doc = new \DOMDocument();
		$doc->load($file);
		$root = $doc->getElementsByTagName('result')->item(0)->getElementsByTagName('rowset')->item(0);
		foreach ($root->childNodes as $node){
			if($node->attributes == null)
				continue;
			/**
			 * @var \DOMElement $node
			 */
			dump($node->attributes->getNamedItem('groupName'));
		}

	}
}
