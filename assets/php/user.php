<?php
class user{
	public $fname;
	public $mname;
	public $lname;
	public $pnumber;
	public $email;
	public $user;
	public $pswd;
	public $pswd2;

	function __construct($fn, $mn, $ln, $pn, $em, $us, $ps, $p2, ){
		this->$fname = $fn;
		this->$mname = $mn;
		this->$lname = $ln;
		this->$pnumber = $pn;
		this->$email = $en;
		this->$user = $us;
		this->$pswd = $ps;
		this->$pswd2 = $p2;
	}
}
