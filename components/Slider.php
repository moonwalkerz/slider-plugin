<?php namespace MoonWalkerz\Slider\Components;

use Cms\Classes\ComponentBase;

use MoonWalkerz\Slider\Models\Slideshow;

/**
 * Slider Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Slider extends ComponentBase
{
    public $slideshow;
    public $slides;
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
        $this->addJs('assets/js/splide.min.js');

        $slideshow = Slideshow::find($this->property('slideShowId'));


        $this->slideshow=Slideshow::find($this->property('slideShowId'));
        
        $this->slides=$this->page['slides'] = $this->slideshow->payload;
        unset($this->slideshow->payload);
        $this->page['slideshow'] = $this->slideshow;
        

        
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
      
        $data['type']=$this->slideshow->type;


        $this->page['data_attribute']=$this->data_attribute=json_encode($data);

   
    
    /*
    resetProgress	

Determines whether to reset the autoplay progress when it is requested to start again or not
	
lazyLoad	

Enables lazy loading
	
preloadPages	

Determines how many pages (not slides) around the active slide should be loaded beforehand
	
keyboard	

Enables keyboard shortcuts
	
wheel	

Enables navigation by the mouse wheel
	
wheelMinThreshold	

The threshold to cut off the small delta produced by inertia scroll
	
wheelSleep	

The sleep duration in milliseconds until accepting next wheel input
	
releaseWheel	

Determines whether to release the wheel event when the carousel reaches the first or last slide
	
direction	

The direction of the carousel
	
cover	

Converts the image src to the css background-image URL of the parent element
	
slideFocus	

Determines whether to add tabindex="0" to visible slides or not
	
focusableNodes	

A selector for focusable nodes inside slides.
	
isNavigation	

If true, the carousel makes slides clickable to navigate another carousel
	
trimSpace	

Determines whether to trim spaces before/after the carousel if the focus option is available
	
omitEnd	

Disables the next arrow when the carousel reaches the last page and omits redundant pagination dots(^4.1.0)
	
updateOnMove	

Updates the is-active status of slides just before moving the carousel
	
mediaQuery	

If min, the media query for breakpoints will be min-width, or otherwise, max-width
	
live	

Enables a live region
	
breakpoints	

The collection of responsive options for specific breakpoints
	
reducedMotion	

Options used when the (prefers-reduced-motion: reduce) is detected
	
classes	

The collection of class names
	
i18n	

The collection of i18n strings
	
destroy	

Destroys the carousel

*/
    }
}
