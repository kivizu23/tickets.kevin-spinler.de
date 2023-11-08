<?php
namespace Kst\Controllers;

use Kst\Controller;
use Kst\Models\Page;
use Kst\Models\SqlConnection;

class PageController extends Controller {
    private $pages;
    private $connection;

    public function __construct() {

        $this->connection = new SqlConnection();

        $this->pages = array();
        $sql = "SELECT * FROM pages";
        $result = $this->connection->query($sql);

        while ($row = $result->fetch_assoc()) {
            $this->pages[] = new Page(
                $row['id'],
                $row['type'],
                $row['template'],
                $row['slug'],
                $row['title'],
                $row['keyword'],
                $row['description'],
                $row['author'],
                $row['image'],
                $row['categoryID'],
                $row['tagsID'],
                $row['status'],
                $row['parent'],
                $row['order'],
                $row['password'],
                $row['content'],
                $row['created_at'],
                $row['updated_at'],
                $row['social_image'],
                $row['social_title'],
                $row['social_description']
            );
        }

    }

    public function getPages() {
        return $this->pages;
    }

    private function getPageBySlug($slug) {
        $pages = $this->getPages();
        $page = null;
        foreach($pages as $p) {
            if($p->getSlug() == $slug) {
                $page = $p;
            }
        }

        return $page;
    }

    public function index($slug) {
        $page = $this->getPageBySlug($slug);

        $this->render('Page', ['page' => $page]);
    }
}
