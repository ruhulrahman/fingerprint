<?php

namespace Vladanme\Fingerprint;

class Title extends FingerprintType
{
    // English stopwords that make sense for title names.
    protected $eng_rem = [
      'an',
      'and',
      'at',
      'for',
      'in',
      'of',
      'or',
      'the',
      'to'
    ];

    protected $add_rem = [];
    protected $add_syn = [
      'vp'             => 'vice president',
      'ceo'            => 'chief executive officer',
      'cfo'            => 'chief financial officer',
      'coo'            => 'chief operating officer',
      'cmo'            => 'chief marketing officer',
      'cto'            => 'chief technology officer',
      'hr'             => 'human resources',
      'resource'       => 'resources',
      'manag'          => 'manager',
      'manage'         => 'manager',
      'managers'       => 'manager',
      'mgr'            => 'manager',
      'exec'           => 'executive',
      'off'            => 'officer',
      'admin'          => 'administrator',
      'administration' => 'administrator',
      'ast'            => 'assistant',
      'asst'           => 'assistant',
      'operation'      => 'operations',
      'ser'            => 'services',
      'serv'           => 'services',
      'service'        => 'services',
      'it'             => 'information technology',
      'i t'            => 'information technology',
      'dir'            => 'director',
      'directors'      => 'director',
      'tech'           => 'technology',
      'technologies'   => 'technology',
      'clin'           => 'clinical',
      'pro'            => 'professional',
      'educ'           => 'education',
      'sci'            => 'science',
      'sr'             => 'senior',
      'jr'             => 'junior',
      'chair'          => 'chairman',
      'stf'            => 'staff',
      'sls'            => 'sales',
      'rep'            => 'representative',
      'ctr'            => 'control',
      'system'         => 'systems',
    ];
    protected $add_syn_rem = [
      'us'  => 'united states',
      'usa' => 'united states',
    ];

    protected $all_rem = [
      'st',
      'nd',
      'rd',
      'th',
      'first',
      'second',
      'third',
      'fourth',
      'fifth',
      'sixth',
      'seventh',
      'eighth',
      'ninth',
      'grade',
      'global',
      'front',
      'end',
      'web',
      'top',
      'i',
      'ii',
      'iii',
      'iv',
      'europe',
      'asia',
      'pacific',
      'latin',
      'canada'
    ];
    protected $all_syn = [
      'v p'           => 'vice president',
      'h r'           => 'human resources',
      'human res'     => 'human resources',
      'reso'          => 'resources',
      'resou'         => 'resources',
      'resour'        => 'resources',
      'resourc'       => 'resources',
      'ma'            => 'manager',
      'man'           => 'manager',
      'mana'          => 'manager',
      'mngr'          => 'manager',
      'exe'           => 'executive',
      'execu'         => 'executive',
      'execut'        => 'executive',
      'executi'       => 'executive',
      'executiv'      => 'executive',
      'executives'    => 'executive',
      'offi'          => 'officer',
      'offic'         => 'officer',
      'officers'      => 'officer',
      'admi'          => 'administrator',
      'admini'        => 'administrator',
      'adminis'       => 'administrator',
      'administ'      => 'administrator',
      'administr'     => 'administrator',
      'administra'    => 'administrator',
      'administrat'   => 'administrator',
      'administrato'  => 'administrator',
      'administrati'  => 'administrator',
      'administratio' => 'administrator',
      'assi'          => 'assistant',
      'assis'         => 'assistant',
      'assist'        => 'assistant',
      'assista'       => 'assistant',
      'assistan'      => 'assistant',
      'assistants'    => 'assistant',
      'assc'          => 'associate',
      'assoc'         => 'associate',
      'ope'           => 'operations',
      'oper'          => 'operations',
      'opera'         => 'operations',
      'operat'        => 'operations',
      'operati'       => 'operations',
      'operatio'      => 'operations',
      'srv'           => 'services',
      'srvs'          => 'services',
      'srvc'          => 'services',
      'srvcs'         => 'services',
      'servi'         => 'services',
      'servic'        => 'services',
      'pres'          => 'president',
      'presi'         => 'president',
      'presid'        => 'president',
      'preside'       => 'president',
      'presiden'      => 'president',
      'inf'           => 'information',
      'info'          => 'information',
      'infor'         => 'information',
      'inform'        => 'information',
      'informa'       => 'information',
      'informat'      => 'information',
      'informati'     => 'information',
      'informatio'    => 'information',
      'informations'  => 'information',
      'dire'          => 'director',
      'direc'         => 'director',
      'directo'       => 'director',
      'techn'         => 'technology',
      'techno'        => 'technology',
      'technol'       => 'technology',
      'technolo'      => 'technology',
      'technolog'     => 'technology',
      'sys'           => 'systems',
      'syst'          => 'systems',
      'syste'         => 'systems',
      'eng'           => 'engineer',
      'engi'          => 'engineer',
      'engin'         => 'engineer',
      'enginee'       => 'engineer',
      'engineers'     => 'engineer',
      'env'           => 'environmental',
      'envir'         => 'environmental',
      'enviro'        => 'environmental',
      'environ'       => 'environmental',
      'environment'   => 'environmental',
      'hum'           => 'human',
      'huma'          => 'human',
      'owners'        => 'owner',
      'spt'           => 'support',
      'supt'          => 'support',
      'supp'          => 'support',
      'snr'           => 'senior',
      'adj'           => 'adjunct',
      'instr'         => 'instructor',
    ];
}
