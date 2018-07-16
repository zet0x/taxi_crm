<?

namespace App\Helpers;

use App\User;

class CRM
{
	public static function all_users()
	{
		$users = User::get();
		return $users;
	}
}