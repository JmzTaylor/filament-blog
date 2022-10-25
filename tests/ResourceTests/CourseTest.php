<?php

use Stephenjude\FilamentBlog\Models\Course;
use Stephenjude\FilamentBlog\Resources\CourseResource;

it('can render course list table', function () {
    $this->get(CourseResource::getUrl('index'))->assertSuccessful();
});

it('can render course create form', function () {
    $this->get(CourseResource::getUrl('create'))->assertSuccessful();
});

it('can render course edit form', function () {
    $this->get(CourseResource::getUrl('edit', [
        'record' => Course::factory()->create(),
    ]))->assertSuccessful();
});
