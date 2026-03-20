<?php

test('home page can be rendered with portfolio and navbar content', function () {
    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('Me')
        ->assertSee('Blogs')
        ->assertSee('mc-logo.png')
        ->assertSee('Mark Cole')
        ->assertSee('Full Stack Laravel Developer')
        ->assertSee('cole-1side.jpeg')
        ->assertSee('Founder & CEO')
        ->assertSee('Desishub Technologies')
        ->assertSee('Kampala, Central Region, Uganda')
        ->assertSee('LinkedIn')
        ->assertSee('muke-johnbaptist')
        ->assertSee('daily.dev')
        ->assertSee('@JBWEBDEVELOPER')
        ->assertSee('About')
        ->assertSee('Hello, World!')
        ->assertSee('Grit Framework')
        ->assertSee('Stack')
        ->assertSee('aria-label="Laravel"', false)
        ->assertSee('aria-label="Livewire"', false)
        ->assertSee('aria-label="Postgres"', false)
        ->assertSee('aria-label="Resend"', false)
        ->assertSee('aria-label="Laravel Cloud"', false)
        ->assertSee('aria-label="Tailwind"', false)
        ->assertSee('aria-label="Git"', false)
        ->assertSee('aria-label="GitHub"', false)
        ->assertSee('My Projects & Platforms')
        ->assertSee('Desishub Technologies')
        ->assertSee('YouTube (14.7K)')
        ->assertSee('Built by')
        ->assertSee('JB (Muke Johnbaptist)')
        ->assertSee('aria-label="GitHub"', false)
        ->assertSee('aria-label="Toggle Theme"', false)
        ->assertSee('Ctrl K');
});
