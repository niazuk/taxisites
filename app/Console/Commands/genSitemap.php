<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Spatie\Sitemap\SitemapGenerator;
use Watson\Sitemap\Facades\Sitemap;

class genSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:genSitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a new Sitemap';


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */

    /**
     * This Function uses both Watson and Spatie... First one generates a sitemap.xml with just pages
     * Watson then crawls through the Urls and makes an array to scrape for images...
     */
    public function handle() {
        //SPATIE
        SitemapGenerator::create(url('/'))->writeToFile(storage_path("app/public/sitemap.xml"));
        //WATSON
        $urls = array();
        $xml = simplexml_load_file(storage_path('app/public/sitemap.xml'));
        foreach ($xml->url as $x){
            array_push($urls,dom_import_simplexml($x->loc)->textContent);
        }
        foreach ($urls as $url){
            $html=file_get_html($url);
            $tag = Sitemap::addTag($url,Carbon::now(),'daily','0.8');
            foreach ($html->find('img') as $img){
                if ($img->src='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs='){
                    $tag->addImage($img->{'data-src'},$img->alt);
                } else {
                    $tag->addImage($img->src,$img->alt);
                }

            }
        }
        Storage::put('public/images.xml', Sitemap::xml());
    }
}
