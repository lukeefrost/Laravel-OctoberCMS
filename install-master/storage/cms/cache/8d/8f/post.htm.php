<?php 
class Cms5ed266bba6808256740109_078907847521e242a1ac6b2d134d9cb3Class extends Cms\Classes\PageCode
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
