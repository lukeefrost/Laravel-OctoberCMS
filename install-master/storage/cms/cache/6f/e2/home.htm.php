<?php 
class Cms5ed266af7e955399510184_c3d23953af02ddb4568eb2cc4d6704b2Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
