<?php
namespace App\Http\Controllers;
/**
 *
 */
use App\Member;

class MemberController extends controller {

	public function info($id) {

		return Member::getMember();
		//return route('memberinfo');
		//return 'member-id'. $id;
		/*return view('member/info',[
				'name'=>'苏名祁',
				'age'=>18*/

		//	]);
	}
}
?>