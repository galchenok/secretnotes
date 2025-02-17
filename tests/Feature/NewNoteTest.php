<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * @covers \App\Http\Controllers\NoteController::showCreatePage
 */
class NewNoteTest extends TestCase
{
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get(route('page.note.new'));

        $response->assertStatus(200);

        // TODO Можно вынести (проверять на каждой странице)
        $response->assertSee('Yandex.Metrika counter');
    }
}
