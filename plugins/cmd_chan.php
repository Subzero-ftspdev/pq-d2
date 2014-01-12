<?php
	cmds_init(CMDS_PRIVATE,'CHAN','cmd_chan',CMDS_P_NICK|CMDS_P_MSG);
	
	function cmd_chan($nick,$msg)
	{
		util_split($code,$msg);
		$code=strtolower($code);
		$config=&config_get('channels');
		switch($code)
		{
			case 'add':
				$channels=explode(' ',$msg);
				foreach ($channels as $chan)
				{
					$config[]=array('name'=>$chan);
				}
				join_($channels);
				break;
			case 'del':
				$channels=explode(' ',$msg);
				$del=array();
				foreach($config as $idx=>$chan)
				{
					$chan=strtolower($chan[0]);
					$mycid[$idx]=$chan;
				}
				foreach($channels as $chan)
				{
					if(($cid=array_search($chan,$mycid))!==FALSE)
					{
						unset($config[$cid]);
						$pchan[]=$chan;
					}
				}
				part($pchan);
				break;
		}
	}
	
