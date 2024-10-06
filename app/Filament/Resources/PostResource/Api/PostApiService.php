<?php
namespace App\Filament\Resources\PostResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\PostResource;
use Illuminate\Routing\Router;


class PostApiService extends ApiService
{
    protected static string | null $resource = PostResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}
