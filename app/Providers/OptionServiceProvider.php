<?php
namespace App\Providers;
use App\Models\Option;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class OptionServiceProvider extends ServiceProvider
{
    // collection
    protected $options = null;

    public function boot()
    {
        $this->options = collect();

        $opt = Option::all();
        foreach( $opt as $option )
        {
            $this->options->put( $option->name, $option->value );
        }
    }

    public function register() {
        $t = $this;
        // initialize View composer make the variable options accessible
        View::composer("*", function($view) use($t) {
            $view->with("options", $t);
        });
    }

    public function get( $key, $default = null )
    {
        return $this->options->get( $key, $default );
    }
}