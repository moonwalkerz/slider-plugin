<?php namespace Moonwalkerz\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMoonwalkerzSliderSlideshows extends Migration
{
    public function up()
    {
        Schema::create('moonwalkerz_slider_slideshows', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->text('payload')->nullable();
            $table->text('responsive')->nullable();


            // splide options
            $table->boolean('autoplay')->default(false);
            $table->boolean('rewind')->default(false);

            $table->boolean('auto_width')->default(false);
            $table->boolean('auto_height')->default(false);
            
            $table->boolean('pause_on_hover')->default(false);
            $table->boolean('pause_on_focus')->default(false);
            
            $table->boolean('wait_for_transition')->default(false);
            $table->boolean('reset_progress')->default(false);

            $table->boolean('wheel')->default(false);
            $table->boolean('release_wheel')->default(false);

            $table->boolean('cover')->default(false);
            $table->boolean('slidefocus')->default(false);

            $table->boolean('is_navigation')->default(false);
            $table->boolean('trim_space')->default(false);

            $table->boolean('omit_end')->default(false);

            $table->boolean('live')->default(false);
            
            $table->boolean('update_on_move')->default(false);

            $table->boolean('destroy')->default(true);

            $table->boolean('arrows')->default(true);
            $table->boolean('pagination')->default(true);
            $table->boolean('pagination_keyboard')->default(true);
            
            $table->boolean('drag')->default(true);
            $table->boolean('rewind_by_drag')->default(false);
            $table->boolean('clone_status')->default(true);
            
            
            $table->boolean('snap')->default(false);


            // splide options
            $table->string('type')->default('slide'); //slide loop fade
            $table->string('role')->default('region');
            $table->string('aria_label')->nullable(); // aria-label
            $table->string('aria_labelledby')->nullable(); //aria-labelledby
            
            $table->integer('speed')->default(0);
            $table->integer('rewind_speed')->default(0);
            
            $table->string('width')->nullable();
            $table->string('height')->nullable();

            $table->string('fixed_width')->nullable();
            $table->string('fixed_height')->nullable();

            $table->float('height_ratio')->default(4/3);



            $table->integer('start')->default(0);

            $table->integer('per_page')->nullable();
            $table->integer('per_move')->nullable();

            $table->integer('clones')->nullable();
            $table->string('drag_min_treshold')->nullable();
            

            $table->string('focus')->nullable();

            $table->string('gap')->nullable();

            $table->string('padding')->default(false); //padding: number | string | { left?: number | string, right?: number | string } | { top?: number | string, bottom?: number | string }
            
          

            $table->string('pagination_direction')->default('ltr'); //ltr | rtl | ttb    

            $table->string('easing')->default('ease'); //linear | ease | ease-in | ease-out | ease-in-out | cubic-bezier(n,n,n,n) | ...
            $table->string('easing_func')->nullable(); //function (t: number): number

            $table->integer('flick_power')->nullable();
            $table->string('arrow_path')->nullable();
            $table->integer('flick_max_pages')->nullable();
            $table->integer('interval')->default(5000);
            $table->integer('preload_pages')->nullable();
            
            $table->string('lazy_load')->nullable();



            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('moonwalkerz_slider_slideshows');
    }
}
