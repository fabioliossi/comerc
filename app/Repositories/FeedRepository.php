<?php
namespace App\Repositories;

use SimpleXMLElement;

CONST URL_FEEDS = "http://www.panoramacomerc.com.br/?feed=rss2";

class FeedRepository
{
	/**
	 * Retorna a lista de feeds do panorama comerc
	 *
	 */
	public function getComercFeeds()
	{
		$feed = file_get_contents(URL_FEEDS);
		$feed = trim($feed);
		return new SimpleXmlElement($feed);
	}
}

?>