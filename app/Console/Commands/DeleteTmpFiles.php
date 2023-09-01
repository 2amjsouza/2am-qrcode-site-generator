<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class DeleteTmpFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tmp-files:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'clear temp files';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $qrCodeFiles = $this->getFiles('qrcode');
        $tmpFiles = $this->getFiles('public/qrcode');

        foreach ($qrCodeFiles as $filePath) {
            $this->deleteFiles($filePath);
        }
        foreach ($tmpFiles as $filePath) {
            $this->deleteFiles($filePath);
        }

        $this->info(count($qrCodeFiles) + count($tmpFiles) . ' files deleted');

        return 0;
    }

    protected function getFiles($path): array
    {
        return Storage::files($path);
    }

    protected function deleteFiles(string $filePath): void
    {
        Storage::delete($filePath);
    }
}
