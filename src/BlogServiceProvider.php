<?php

namespace Stephenjude\FilamentBlog;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Stephenjude\FilamentBlog\Commands\InstallCommand;
use Stephenjude\FilamentBlog\Resources\CategoryResource;
use Stephenjude\FilamentBlog\Resources\CourseResource;

class BlogServiceProvider extends PluginServiceProvider
{
    protected array $resources = [
        CategoryResource::class,
        CourseResource::class,
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-blog')
            ->hasConfigFile()
            ->hasTranslations()
            ->hasCommand(InstallCommand::class)
            ->hasMigration('create_filament_blog_tables');
    }
}
