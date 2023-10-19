<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Country;
use App\Models\Actor;

use App\Models\Author;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
       // Category::factory(10)->create();

      //  $categories = collect(Category::pluck('id'));

      //  Product::factory(50)
           // ->create()
           // ->each(function (Product $product) use ($categories) {
               // $product->categories()->sync($categories->random(2));
      //  });

       // Author::factory(10)->create();
       // Book::factory(50)->create();

       //$country = Country::create(['name' => 'United Kingdom']);
       //$country->cities()->create(['name' => 'London']);
       //$country->cities()->create(['name' => 'Manchester']);
       //$country->cities()->create(['name' => 'Liverpool']);
        
       //$country = Country::create(['name' => 'United States']);
       //$country->cities()->create(['name' => 'Washington']);
       //$country->cities()->create(['name' => 'New York City']);
       //$country->cities()->create(['name' => 'Denver']);

       $actor = Actor::create(['name' => 'Leonardo DiCaprio']);
       $actor->films()->create(['name' => 'Titanic (1997)']);
       $actor->films()->create(['name' => 'The Departed (2006)']);
       $actor->films()->create(['name' => 'The Revenant (2015)']);
       $actor->films()->create(['name' => 'Once Upon a Time in Hollywood (2019)']);
        
       $actor = Actor::create(['name' => 'Tom Hanks']);
       $actor->films()->create(['name' => 'Forrest Gump (1994)']);
       $actor->films()->create(['name' => 'Saving Private Ryan (1998)']);
       $actor->films()->create(['name' => 'Cast Away (2000)']);
       $actor->films()->create(['name' => 'The Da Vinci Code (2006)']);

       $actor = Actor::create(['name' => 'Brad Pitt']);
       $actor->films()->create(['name' => 'Fight Club (1999)']);
       $actor->films()->create(['name' => 'Troy (2004)']);
       $actor->films()->create(['name' => 'Mr. & Mrs. Smith (2005)']);
       $actor->films()->create(['name' => 'Once Upon a Time in Hollywood (2019)']);

       $actor = Actor::create(['name' => 'Robert De Niro']);
       $actor->films()->create(['name' => 'The Godfather Part II (1974)']);
       $actor->films()->create(['name' => 'Taxi Driver (1976)']);
       $actor->films()->create(['name' => 'Goodfellas (1990)']);
       $actor->films()->create(['name' => 'The Irishman (2019)']);

       $actor = Actor::create(['name' => 'Meryl Streep']);
       $actor->films()->create(['name' => 'Kramer vs Kramer (1979)']);
       $actor->films()->create(['name' => 'Sophie\'s Choice (1982)']);
       $actor->films()->create(['name' => 'The Devil Wears Prada (2006)']);
       $actor->films()->create(['name' => 'The Iron Lady (2011)']);

       $actor = Actor::create(['name' => 'Julia Roberts']);
       $actor->films()->create(['name' => 'Pretty Woman (1990)']);
       $actor->films()->create(['name' => 'Erin Brockovich (2000)']);
       $actor->films()->create(['name' => 'Notting Hill (1999)']);
       $actor->films()->create(['name' => 'Wonder (2017)']);
    }
}
