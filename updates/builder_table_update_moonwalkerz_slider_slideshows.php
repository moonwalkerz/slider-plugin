<?php namespace MoonWalkerz\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMoonWalkerzSliderSlideshows extends Migration
{
    public function up()
    {
        Schema::table('moonwalkerz_slider_slideshows', function($table)
        {
            $table->text('breakpoints')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('moonwalkerz_slider_slideshows', function($table)
        {
            $table->dropColumn('breakpoints');
        });
    }
}
