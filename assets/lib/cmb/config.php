<?php
function ls_cln_01() {
  $ls_cln = new_cmb2_box(['title' => 'Client title','id' => 'ls_cln','object_types' => 'clients']);
  $ls_cln->add_field(['name' => 'Client name','id' => 'c_nm','type' => 'text']);
  $ls_cln->add_field(['name' => 'Client title','id' => 'c_ttl','type' => 'text']);
}
add_action('cmb2_init', 'ls_cln_01');

function our_team_cmb() {
  $member_info = new_cmb2_box(['title' => 'Team Member Infos','id' => 'member_skills','object_types' => 'our_teams_cpt']);
  $member_info->add_field(['name' => 'Member Designation','id' => 'member_desig','type' => 'text']);
  $member_info->add_field(['name' => 'Member Skills','id' => 'member_skills','type' => 'text']);
  $member_info->add_field(['name' => 'Member Speech','id' => 'member_speech','type' => 'text']);
}
add_action('cmb2_init', 'our_team_cmb');
