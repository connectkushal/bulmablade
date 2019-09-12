<?php

namespace Connectkushal\Bulmablade;

class InstallCommand extends \Illuminate\Console\Command
{
    protected $signature = 'bulmablade:install';

    protected $description = 'Scaffold basic auth route and views using bulma css';

    public function handle()
    {
        /* $force = false; */

        /* if($this->option('force')) { */
        /*     $force = true; */
        /* } */

        \Artisan::call('vendor:publish', [
            '--provider' => 'connectkushal/bulmablade',
            '--force' => true 
        ]);

        $this->publishHomeController();
        $this->updateRoutesFile();

        $this->info('Published view files, added HomeController and route file updated successfully');
    }
    
    protected function publishHomeController()
    {
        $homeController = 
            str_replace(
                '{{namespace}}',
                $this->laravel->getNamespace(),
                file_get_contents(__DIR__.'/stubs/HomeController.stub')
            );

        file_put_contents(
            app_path('Http/Controllers/HomeController.php'),
            $homeController
        );
    }

    protected function updateRoutesFile()
    {
        file_put_contents(
            base_path('routes/web.php'),
            file_get_contents(__DIR__.'/stubs/routes.stub'),
            FILE_APPEND
        );
    }
}
