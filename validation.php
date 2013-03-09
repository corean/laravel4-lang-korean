<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| such as the size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted"        => ":attribute을(를) 반드시 동의해야 합니다.",
	"active_url"      => ":attribute은(는) 유효한 URL이 아닙니다.",
	"after"           => ":attribute은(는) 반드시 :date 이후 날짜여야 합니다.",
	"alpha"           => ":attribute은(는) 반드시 문자만 포함 할 수 있습니다.",
	"alpha_dash"      => ":attribute은(는) 반드시 문자, 숫자, 대쉬(-)만 포함 할 수 있습니다.",
	"alpha_num"       => ":attribute은(는) 반드시 문자와 숫자만 포함 할 수 있습니다.",
	"before"          => ":attribute은(는) 반드시 :date 이전 날짜여야 합니다.",
	"between"         => array(
		"numeric" => ":attribute은(는) 반드시 :min - :max 사이여야 합니다.",
		"file"    => ":attribute은(는) 반드시 :min - :max 킬로바이트 사이여야 합니다.",
		"string"  => ":attribute은(는) 반드시 :min - :max 자 사이여야 합니다.",
	),
	"confirmed"       => ":attribute 확인 항목이 일치하지 않습니다.",
	"date"            => ":attribute은(는) 유효한 날짜가 아닙니다.",
	"date_format"     => ":attribute은(는) :format 형식과 일치하지 않습니다.",
	"different"       => ":attribute와(과) :other은(는) 반드시 서로 일치하지 않아야 합니다.",
	"digits"          => ":attribute은(는) 반드시 :digits 자리여야 합니다.",
	"digits_between"  => ":attribute은(는) 반드시 :min - :max 자리 사이여야 합니다.",
	"email"           => ":attribute 형식은 유효하지 않습니다.",
	"exists"          => "선택된 :attribute은(는) 존재하지 않습니다.",
	"image"           => ":attribute은(는) 반드시 이미지여야 합니다.",
	"in"              => "선택된 :attribute은(는) 유효하지 않습니다.",
	"integer"         => ":attribute은(는) 반드시 정수여야 합니다.",
	"ip"              => ":attribute은(는) 반드시 유효한 IP 주소여야 합니다.",
	"max"             => array(
		"numeric"     => ":attribute은(는) 반드시 :max 보다 작아야 합니다.",
		"file"        => ":attribute은(는) 반드시 :max 킬로바이트보다 작아야 합니다.",
		"string"      => ":attribute은(는) 반드시 :max 자보다 작아야 합니다.",
	),
	"mimes"           => ":attribute은(는) 반드시 다음의 파일 타입이어야 합니다: :values.",
	"min"             => array(
		"numeric"     => ":attribute은 반드시 최소 :min 이상 이어야 합니다.",
		"file"        => ":attribute은 반드시 최소 :min 킬로바이트 이상 이어야 합니다.",
		"string"      => ":attribute은 반드시 최소 :min 자리 이상 이어야 합니다.",
	),
	"notin"           => "선택된 :attribute은(는) 유효하지 않습니다.",
	"numeric"         => ":attribute은(는) 반드시 숫자여야 합니다.",
    "regex"           => ":attribute 형식은 유효하지 않습니다.",
	"required"        => ":attribute 필드는 필수입니다.",
	"required_with"   => ":values이(가) 있을 경우 :attribute 필드는 필수입니다.",
	"same"            => ":attribute와(가) :other은(는) 반드시 일치해야 합니다.",
	"size"            => array(
		"numeric"    => ":attribute은(는) 반드시 :size 여야 합니다.",
		"file"       => ":attribute은(는) 반드시 :size 킬로바이트여야 합니다.",
		"string"     => ":attribute은(는) 반드시 :size 자 여야 합니다.",
	),
	"unique"          => ":attribute은(는) 이미 사용중 입니다.",
	"url"             => ":attribute 형식은 유효하지 않습니다.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);