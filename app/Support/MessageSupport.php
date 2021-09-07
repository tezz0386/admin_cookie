<?php

namespace App\Support;

use App\Models\Message;


	class MessageSupport
	{
		
		function __construct()
		{
			# code...
		}

		public function getAll()
		{
			return Message::all();
		}
		public function getOnlyRead()
		{
			return Message::where('is_read', 1)->orderByDesc('created_at')->get();
		}
		public function getOnlyNotRead()
		{
			return Message::where('is_read', 0)->orderByDesc('created_at')->get();
		}
		public function getCount($data)
		{
			return count($data);
		}
	}
?>