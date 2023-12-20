<?php

namespace App\Repository;

use App\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

abstract class AbstractRepository implements RepositoryInterface
{
    protected static $model;
    
    public static function all():Collection{
        return self::loadModel()::all();
    }

    public static function new(array $attibutes): Model | null{
        return self::loadModel()::query()->create($attibutes);
    }

    public static function findById(int $id): Model | null{
        return self::loadModel()::query()->find($id);
    }

    public static function loadModel():Model{
        return app(static::$model);
    }

    public static function excluir(int $id): bool{
        return self::loadModel()::query()->where('id', $id)->delete();
    }

    public static function updater(Request $request, int $id): bool{
        return self::loadModel()::query()->where('id', $id)->update($request->except(['_token', '_method']));;
    }
}
?>