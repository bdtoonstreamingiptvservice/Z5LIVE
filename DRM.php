<?php

// [ Update Your Values In Line No 19 and 20 Acces Token and Autorization ]
// URL also May Be Get Change 🥱😆 
// (c) @AviPatilPro GitHub

$curl = curl_init();
$channel =$_GET['c'];

$url="https://spapi.zee5.com/singlePlayback/getDetails?channel_id=$channel&device_id=o6MhX3zFu1lGHBKrR2uW000000000000&platform_name=desktop_web&translation=en&user_language=en,hi,mr&country=IN&state=MH&app_version=2.50.50&user_type=guest&check_parental_control=false&ppid=o6MhX3zFu1lGHBKrR2uW000000000000&version=12";
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "x-access-token": "eyJ0eXAiOiJqd3QiLCJhbGciOiJIUzI1NiJ9.eyJwcm9kdWN0X2NvZGUiOiJ6ZWU1QDk3NSIsInBsYXRmb3JtX2NvZGUiOiJXZWJAJCF0Mzg3MTIiLCJpc3N1ZWRBdCI6IjIwMjItMDMtMDhUMDA6MzA6MDIrMDAwMCIsInR0bCI6ODY0MDB9.J4XvS2z2LIKGgofNrUWeZ1ILcejmIE0-cJ1onGlmg8g",    
  "Authorization": "bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYmYiOjE2NDY3MTIzMTAsImV4cCI6MTY3ODI0ODMxMCwiaXNzIjoiaHR0cHM6Ly91c2VyYXBpLnplZTUuY29tIiwiYXVkIjpbImh0dHBzOi8vdXNlcmFwaS56ZWU1LmNvbS9yZXNvdXJjZXMiLCJzdWJzY3JpcHRpb25hcGkiLCJ1c2VyYXBpIl0sImNsaWVudF9pZCI6InJlZnJlc2hfdG9rZW5fY2xpZW50Iiwic3ViIjoiNGQyMGZhMDktOGFjZi00YmM3LTg2N2UtYjYzNTZkNWY2ZWEwIiwiYXV0aF90aW1lIjoxNjQ2NzEyMzEwLCJpZHAiOiJsb2NhbCIsInVzZXJfaWQiOiI0ZDIwZmEwOS04YWNmLTRiYzctODY3ZS1iNjM1NmQ1ZjZlYTAiLCJzeXN0ZW0iOiJaNSIsImFjdGl2YXRpb25fZGF0ZSI6IjIwMTgtMDctMzBUMTg6MTE6MjciLCJjcmVhdGVkX2RhdGUiOiIyMDE4LTA3LTMwVDE4OjEwOjIyIiwicmVnaXN0cmF0aW9uX2NvdW50cnkiOiJJTiIsInVzZXJfZW1haWwiOiJkZWVwYWxpQGplbWNvc2lnbnMuaW4iLCJ1c2VyX21vYmlsZSI6IjkxODgzOTExOTM3NSIsInN1YnNjcmlwdGlvbnMiOiJbe1wiaWRcIjpcIjA4MDk2OGVhLWIyOTQtNDIwYy1hYmFkLWVmOGRmMzg4ZTFhZVwiLFwidXNlcl9pZFwiOlwiNGQyMGZhMDktOGFjZi00YmM3LTg2N2UtYjYzNTZkNWY2ZWEwXCIsXCJpZGVudGlmaWVyXCI6XCJaRUU1XzFZX1NWT0RfQVJfNDk5XCIsXCJzdWJzY3JpcHRpb25fcGxhblwiOntcImlkXCI6XCIwLTExLTE4NDNcIixcImFzc2V0X3R5cGVcIjoxMSxcInN1YnNjcmlwdGlvbl9wbGFuX3R5cGVcIjpcIlNWT0RcIixcInRpdGxlXCI6XCJQcmVtaXVtXCIsXCJvcmlnaW5hbF90aXRsZVwiOlwiUHJlbWl1bVwiLFwic3lzdGVtXCI6XCJaNVwiLFwiZGVzY3JpcHRpb25cIjpcIjUwJSBvZmYgb24g4oK5OTk5XCIsXCJiaWxsaW5nX2N5Y2xlX3R5cGVcIjpcImRheXNcIixcImJpbGxpbmdfZnJlcXVlbmN5XCI6MzY1LFwicHJpY2VcIjo0OTkuMCxcImN1cnJlbmN5XCI6XCJJTlJcIixcImNvdW50cnlcIjpcIklOXCIsXCJjb3VudHJpZXNcIjpbXCJJTlwiXSxcInN0YXJ0XCI6XCIyMDIxLTAyLTEyVDAwOjAwOjAwWlwiLFwiZW5kXCI6XCIyMDIyLTAzLTMxVDIzOjU5OjU5WlwiLFwib25seV9hdmFpbGFibGVfd2l0aF9wcm9tb3Rpb25cIjpmYWxzZSxcInJlY3VycmluZ1wiOnRydWUsXCJwYXltZW50X3Byb3ZpZGVyc1wiOlt7XCJuYW1lXCI6XCJBcHBsZVwiLFwicHJvZHVjdF9yZWZlcmVuY2VcIjpcIlpFRTVfMVlfU1ZPRF9BUl80OTlcIn1dLFwicHJvbW90aW9uc1wiOltdLFwiYXNzZXRfdHlwZXNcIjpbNiwwLDldLFwiYXNzZXRfaWRzXCI6W10sXCJidXNpbmVzc190eXBlXCI6XCJmcmVlXCIsXCJiaWxsaW5nX3R5cGVcIjpcInByZW1pdW1cIixcIm51bWJlcl9vZl9zdXBwb3J0ZWRfZGV2aWNlc1wiOjMsXCJtb3ZpZV9hdWRpb19sYW5ndWFnZXNcIjpbXSxcInR2X3Nob3dfYXVkaW9fbGFuZ3VhZ2VzXCI6W10sXCJjaGFubmVsX2F1ZGlvX2xhbmd1YWdlc1wiOltdLFwiZHVyYXRpb25fdGV4dFwiOlwiOTk5XCIsXCJ2YWxpZF9mb3JfYWxsX2NvdW50cmllc1wiOnRydWUsXCJhbGxvd2VkX3BsYXliYWNrX2R1cmF0aW9uXCI6NixcImNhdGVnb3J5XCI6XCJcIn0sXCJzdWJzY3JpcHRpb25fc3RhcnRcIjpcIjIwMjEtMDYtMTFUMTY6MzQ6MTBaXCIsXCJzdWJzY3JpcHRpb25fZW5kXCI6XCIyMDIyLTA2LTExVDIzOjU5OjU5WlwiLFwic3RhdGVcIjpcImFjdGl2YXRlZFwiLFwicmVjdXJyaW5nX2VuYWJsZWRcIjp0cnVlLFwicGF5bWVudF9wcm92aWRlclwiOlwiQXBwbGVcIixcImZyZWVfdHJpYWxcIjpudWxsLFwiY3JlYXRlX2RhdGVcIjpcIjIwMjEtMDYtMTFUMTY6MzQ6MDEuNTU3WlwiLFwiaXBfYWRkcmVzc1wiOlwiMTAzLjEyMS43NS4xOTJcIixcImNvdW50cnlcIjpcIklOXCIsXCJyZWdpb25cIjpcIk1IXCIsXCJhZGRpdGlvbmFsXCI6e1wib3JpZ2luYWxfdXNlcl9hZ2VudFwiOlwiWkVFNS80MzY5IENGTmV0d29yay8xMjQwLjAuNCBEYXJ3aW4vMjAuNS4wXCIsXCJYLUZvcndhcmRlZC1Gb3JcIjpcIjIzLjIxMi4yNTIuMTgyXCIsXCJUcnVlLUNsaWVudC1JUFwiOlwiMTAzLjEyMS43NS4xOTJcIn0sXCJkaXNjb3VudF9hbW91bnRcIjowLjAsXCJwcm9tb19jb2RlXCI6XCJcIixcImFsbG93ZWRfYmlsbGluZ19jeWNsZXNcIjowLFwidXNlZF9iaWxsaW5nX2N5Y2xlc1wiOjF9XSIsInNjb3BlIjpbInN1YnNjcmlwdGlvbmFwaSIsInVzZXJhcGkiLCJvZmZsaW5lX2FjY2VzcyJdLCJhbXIiOlsiZGVsZWdhdGlvbiJdfQ.hoPGSQHJL_MbsMCsGPAjV00xEzrmd9BS4DeBTbZyqXT9vNNg8mo8YVzRjdQPlQk9EBUYntmrGoMxQb0IaB8ld4dHBBPnlbDIgNUFzr6sWnoKgupAMCld7Ue2lNtfpBLgHGXzueAztI9cpOSO2R03jJoTef6OjSlCv-OBf_LMnNevVdr_ziQwppztIZE-kl8VEu6iuFgq-001VyM-QZRxlkgwGcy6RbcQEdOjPBdmUbKmvceQqiv-pcbJbpLzFOyo1dK1WzEobLH1qV0k8lHV6P0BaT4dGOe0BPmeYo3d5lkJ5UW4CG2ZG2jqGKqsoaHbeDa8Irb8PV0z9T7it3FuHA"   
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$zx = json_decode($response, true);

$image= $zx["assetDetails"]['image_url'];
$img = str_replace('270x152', '1170x658', $image);
$title= $zx["assetDetails"]['title'];
$playit= $zx["keyOsDetails"]['video_token'];

header("Content-Type: application/json");
$errr= array("error" => "Put Here Only ZEE5 Proper URL ,  Invalid Input " );
$err =json_encode($errr);


$apii = array("title" => $title, "image" => $img,  "url" => $playit, "created_by" => "ALEX PRO");

$api =json_encode($apii, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

header("Content-Type: application/json");
echo $api;
  
?>
