<?php namespace MoonWalkerz\Slider\Components;

use Cms\Classes\ComponentBase;

use Moonwalkerz\Slider\Models\Slideshow;

/**
 * Slider Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Slider extends ComponentBase
{
    public $slideshow;
    public $data_attribute;
    /**
     * componentDetails
     */
    public function componentDetails()
    {
        return [
            'name' => 'Slider Component',
            'description' => 'moonwalkerz:'
        ];
    }

    /**
     * defineProperties for the component
     *
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'slideShowId' => [
                'title'       => 'moonwalkerz.slider::lang.slider',
                'description' => 'moonwalkerz.slider::lang.slider_description',
                'type'        => 'dropdown',
                'default'     => '',
                'placeholder' => 'moonwalkerz.slider::lang.slider_select',
            ]
        ];
    }
    
    public function getSlideShowIdOptions()
    {
        return Slideshow::query()->lists('title','id');
    }
    
    public function onRun()
    {
        $this->addCss('assets/css/splide.css');
    //    $this->addCss('assets/css/themes/splide-default.min.css');
        $this->addJs('assets/js/splide.min.js');
        $this->slideshow=$this->page['slideshow'] = Slideshow::find($this->property('slideShowId'));
        
        
        $data=[];
        $data['autoplay']=$this->slideshow->autoplay;


        $data['rewind']=$this->slideshow->rewind;
        
        $data['autoWidth']=$this->slideshow->auto_width;
        $data['autoHeight']=$this->slideshow->auto_height;
        $data['pauseOnHover']=$this->slideshow->pause_on_hover;
        $data['pauseOnFocus']=$this->slideshow->pause_on_focus;
        
        $data['waitForTransition']=$this->slideshow->wait_for_transition;
        $data['resetProgress']=$this->slideshow->reset_progress;
        $data['wheel']=$this->slideshow->wheel;
        $data['width']=$this->slideshow->width;
        $data['height']=$this->slideshow->height;
        $data['cover']=$this->slideshow->cover;
        
        $data['slideFocus']=$this->slideshow->slidefocus;
        $data['isNavigation']=$this->slideshow->is_navigation;
        
        $data['trimSpace']=$this->slideshow->trim_space;
        $data['omitEnd']=$this->slideshow->omit_end;

        $data['live']=$this->slideshow->live;
        $data['updateOnMove']=$this->slideshow->update_on_move;
        $data['destroy']=$this->slideshow->destroy;

        $data['arrows']=$this->slideshow->arrows;

        $data['keyboard']=$this->slideshow->keyboard;

        $data['drag']=$this->slideshow->drag;

        $data['flickPower']=$this->slideshow->flick_power;
        $data['flickMaxPages']=$this->slideshow->flick_max_pages;
        $data['direction']=$this->slideshow->direction;
        $data['height']=$this->slideshow->height;
        $data['fixedHeight']=$this->slideshow->fixed_height;
        $data['heightRatio']=$this->slideshow->height_ratio;
        $data['padding']=$this->slideshow->padding;
        $data['focus']=$this->slideshow->focus;
        $data['start']=$this->slideshow->start;

        $data['pagination']=$this->slideshow->pagination;
        if(!empty($this->slideshow->per_page)) {
            $data['perPage']=$this->slideshow->per_page;
        }
        if(!empty($this->slideshow->per_move)) {
            $data['perMove']=$this->slideshow->per_move;
        }
        $data['perPageFocus']=$this->slideshow->per_page_focus;
        if(!empty($this->slideshow->gap)) {
            $data['gap']=$this->slideshow->gap;
        }
        
        if(!empty($this->slideshow->easing)) {
            $data['easing']=$this->slideshow->easing;
        }

        if(!empty($this->slideshow->easing_func)) {
            $data['easingFunc']=$this->slideshow->easing_func;
        }

        if(!empty($this->slideshow->arrow_path)) {
            $data['arrowPath']=$this->slideshow->arrow_path;
        }

        $data['isNavigation']=$this->slideshow->is_navigation;
       
        $data['interval']=$this->slideshow->interval;
        $data['preloadPages']=$this->slideshow->preload_pages;

        $data['lazyLoad']=$this->slideshow->lazy_load;
        


        $this->page['data_attribute']=$this->data_attribute=json_encode($data);

    }
}
