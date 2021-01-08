<?php

namespace Tests\Feature;

use Tests\TestCase;

class ViewMovieTest extends TestCase
{
   public function test_the_main_page_shows_correct_info()
   {
       $response = $this->get(route('movie.index'));

       $response->assertSuccessful();
    
   }
}
