<?php

    namespace Martin\BlogNewButton;

    use System\Classes\PluginBase;

    class Plugin extends PluginBase {

        public $require = ['RainLab.Blog'];

        public function pluginDetails() {
            return [
                'name'        => 'martin.blognewbutton::lang.plugin.name',
                'description' => 'martin.blognewbutton::lang.plugin.description',
                'author'      => 'Martin M.',
                'icon'        => 'icon-plus',
                'homepage'    => 'https://octobercms.com/author/Martin'
            ];
        }

        public function boot() {

            \Event::listen('backend.menu.extendItems', function($manager) {

                $manager->addSideMenuItems('RainLab.Blog', 'blog', [
                    'new' => [
                        'label'       => 'rainlab.blog::lang.posts.new_post',
                        'icon'        => 'icon-plus',
                        'order'       => 10,
                        'url'         => \Backend::url('rainlab/blog/posts/create'),
                        'permissions' => ['rainlab.blog.access_posts'],
                    ]
                ]);

            });

        }

    }

?>