<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Note;
use Illuminate\Http\Response;

class TodoTest extends TestCase
{

    use DatabaseMigrations;

     /** @test */
     public function test_user_can_read_all_notes()
     {

        $note = Note::factory()->create();
        $response = $this->get('/api/note');
        $response->assertSee($note->title);
        $response->assertSee($note->content);
        $response->assertSee($note->is_done);
        $response->assertSee($note->due_date);

     }

     public function test_user_can_read_single_note(){

        $note = Note::factory()->create();
        $response = $this->get('/api/note/'.$note->id);
        $response->assertSee($note->title)
            ->assertSee($note->content)
            ->assertSee($note->name)
            ->assertSee($note->due_date)
            ->assertSee($note->is_done)
            ->assertSee($note->id);
    }

    public function test_note_created_successfully() {
        
        $note = [
            "title" => "Test title",
            "name" => ["first","second","third","fourth"],
            "content" => "check content",
            "is_done" => "yes"
        ];
        $response = $this->post('/api/note', $note);
        $response->assertStatus(Response::HTTP_OK)
            ->assertSee($note['title'])
            ->assertSee($note['content'])
            ->assertSee($note['name'])
            ->assertSee($note['is_done']);
            
    }

    public function test_note_updated_successfully() {
    
        $note = Note::factory()->create();
        $response = $this->PUT('/api/note/'.$note->id);
        $response->assertStatus(Response::HTTP_OK)
            ->assertSee($note['title'])
            ->assertSee($note['content'])
            ->assertSee($note['name'])
            ->assertSee($note['is_done']);
            
    }
    
    public function test_note_deleted_successfully() {
        
        $note = Note::factory()->create();
        $response = $this->delete('/api/note/'.$note->id);
        $response->assertStatus(Response::HTTP_OK);
            
    }
    
}
     