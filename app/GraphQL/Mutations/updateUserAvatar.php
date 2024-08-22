<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;
use App\Models\User;
final readonly class updateUserAvatar
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        // TODO implement the resolver
        $file = $args['image'];
        $path = $file->storePublicly('public/uploads');
        $user = User::find($args['id']);
        $user->update(['avatar'=>$path]);
        return $user;
    }
}
