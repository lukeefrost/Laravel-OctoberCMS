<?php 
class Cms5ed39eb21882a025003209_bcb6bdaecf6d5545c21828cfb7b3ec9fClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
