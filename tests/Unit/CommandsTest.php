<?php


use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
class CommandsTest extends TestCase
{
    public function test_delete_tmp_files()
    {
        Storage::fake('local');

        UploadedFile::fake()->image('file1.png')->store('qrcode');
        UploadedFile::fake()->image('file1.png')->store('public/qrcode');

        $this->artisan('tmp-files:clear')
            ->expectsOutput(2 . ' files deleted')
            ->assertSuccessful();
    }
}

