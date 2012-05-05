<?php

class DatabasePresenter extends BasePresenter {
    /**
     * 
     * @var \Nette\Database\Connection
     */
    private $db;
    
    protected function startup() {
        parent::startup();
         $this->db = $this->getService('database');
    }
    
    public function renderDefault(){
        $db = $this->db;
        $books = $db->table('book'); 
        
        foreach($books as $book){
            dump($book->title);
        }
    }
    
    private function renderQuery($sql){
        echo Nette\Database\Helpers::dumpSql($sql);
    }
    
    private function renderTitle($text){
        echo \Nette\Utils\Html::el('font', $text)->style('color: red; font-size: 14px;');
    }
    
    private function renderLine(){
        echo \Nette\Utils\Html::el('hr');
    }
    
    private function renderCode($code){
        echo "<br />";
        highlight_string($code);
    }
    
    public function renderTest(){        
        /*$query = $this->db->table('author')
           ->group('author.id', 'COUNT(book:id) > 1');
        $this->renderCode("<? ... \$query = \$this->db->table('author')->group('author.id', 'COUNT(book:id) > 1'); ...?>");
        $this->renderQuery($query->getSql());
        $this->renderLine();
        */
        $this->renderTitle('Books for author with id 1:');
        $this->renderCode("<? ... \$this->db->table('book')->where('author.id',1); ...?>");
        
        $query = $this->db->table('book')->where('author.id',1);
        $this->renderQuery($query->getSql());
        
        $this->renderLine();
        $this->renderTitle('Authors, who wrote book with id 1:');
        $this->renderCode("<? ... \$this->db->table('author')->where('book:id',1); ...?>");
        $query = $this->db->table('author')->where('book:id',1);
        $this->renderQuery($query->getSql());
        
        $this->renderLine();
        $this->renderTitle('Example 3:');
        $this->renderCode("<? ... \$this->db->table('author')->select('author.*,COUNT(DISTINCT book:book_tag:tag_id) AS tagsCount')->group('author.id')->order('tagsCount'); ...?>");
        $query = $this->db->table('author')->select('author.*,COUNT(DISTINCT book:book_tag:tag_id) AS tagsCount')->group('author.id')->order('tagsCount');;
        $this->renderQuery($query->getSql());
        
        $this->renderLine();
        $this->renderTitle('Example 4:');
        $this->renderCode("<? ... \$this->db->table('book_tag')->select('book.author.*,COUNT(DISTINCT tag_id) AS tagsCount')->group('book.author.id')->order('tagsCount'); ...?>");
        $query = $this->db->table('book_tag')->select('book.author.*,COUNT(DISTINCT tag_id) AS tagsCount')->group('book.author.id')->order('tagsCount');;
        $this->renderQuery($query->getSql());
        
        $this->renderLine();
        $this->renderTitle('Example 5:');
        /*$this->renderCode("<? ... \$this->db->table('book_tag')->select('book.author.*,COUNT(DISTINCT tag_id) AS tagsCount')->group('book.author.id')->order('tagsCount'); ...?>");*/
        $books = $query = $this->db->table('book');
        foreach($books as $book){
            echo $book->title.' - ';
            echo $book->author->name;
            echo '<br>';
        }
        
        $this->renderQuery($query->getSql());
    }
    
    public function afterRender(){
        $this->terminate();
    }
}

