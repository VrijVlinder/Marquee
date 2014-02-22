<?php if (!defined('APPLICATION'))  exit();


// Define the plugin:
$PluginInfo['Marquee'] = array(
    'Description' => 'Adds an Image and/or a Text Marquee to Discussions Index Header.',
    'Version' => '1.2',
    'RequiredApplications' => array('Vanilla' => '2.0.18'),
    'RequiredTheme' => FALSE,
    'RequiredPlugins' => FALSE,
    'HasLocale' => FALSE,
    'SettingsPermission' => 'Garden.AdminUser.Only',
    'SettingsUrl' => '/plugin/marquee',
    'Author' => "VrijVlinder"
);

class Marquee extends Gdn_Plugin {


   public function __construct() {
      
   }
   
  
   public function Base_Render_Before($Sender) {
      $Sender->AddCssFile($this->GetResource('design/marq.css', FALSE, FALSE));
     
   }
 
  public function PluginController_Marquee_Create($Sender) {
         $Sender->Title('Marquee');
         $Sender->AddSideMenu('plugin/marquee');
         $Sender->Form = new Gdn_Form();
        
         $this->Dispatch($Sender, $Sender->RequestArgs);
         }
         
           
    public function Controller_Index($Sender) {      
        
        $Sender->Permission('Vanilla.Settings.Manage');
        $Sender->SetData('PluginDescription',$this->GetPluginKey('Description'));
        
      
        $Sender->Form = new Gdn_Form();
        $Validation = new Gdn_Validation();
        $ConfigurationModel = new Gdn_ConfigurationModel($Validation);
        $ConfigurationModel->SetField(array(
            'Plugins.Marquee.Imm1',
            'Plugins.Marquee.Imm2',
            'Plugins.Marquee.Imm3',
            'Plugins.Marquee.Imm4',
            'Plugins.Marquee.Imm5',
            'Plugins.Marquee.Imm6',
        ));
        $Sender->Form->SetModel($ConfigurationModel);


        if ($Sender->Form->AuthenticatedPostBack() === FALSE) {
            $Sender->Form->SetData($ConfigurationModel->Data);
        } else {
            $Data = $Sender->Form->FormValues();

            if ($Sender->Form->Save() !== FALSE)
                $Sender->StatusMessage = T("Your settings have been saved.");
        }

        $Sender->Render($this->GetView('marq-settings.php'));
    }
  
 
   // alternate for version 2.0.18 if you want this under the tabs replace the function below with this one
   //public function DiscussionsController_AfterDiscussionTabs_Handler($Sender) {
  
   public function DiscussionsController_BeforeRenderAsset_Handler($Sender) {
      
       $AssetName = GetValueR('EventArguments.AssetName', $Sender);
      
     if ($AssetName == "Content") {
       
       
        $Object = $Sender->Discussion;
        
        
        $Marquee1 = C('Plugins.Marquee.Imm1');
        $Marquee2 = C('Plugins.Marquee.Imm2');
        $Marquee3 = C('Plugins.Marquee.Imm3');
        $Marquee4 = C('Plugins.Marquee.Imm4');
        $Marquee5 = C('Plugins.Marquee.Imm5');
        $Marquee6 = C('Plugins.Marquee.Imm6');
       
        
 //you can change the file types bellow
     
        $MarqName = $Sender->Discussion;
        $MarqImage = "";
        switch ($MarqName)
       {
       case $Marquee1:
            $MarqImage  = $this->GetWebResource('img/image1.gif');
            break;
       case $Marquee2:
            $MarqImage  = $this->GetWebResource('img/image2.gif');
           break;
       
       case $Marquee3:
            $MarqImage  = $this->GetWebResource('img/image3.gif');
            break;
       
       case $Marquee4:
            $MarqImage  = $this->GetWebResource('img/image4.gif');
           break;
       
       case $Marquee5:
            $MarqImage  = $this->GetWebResource('img/image5.png');
            break;
       case $Marquee6:
            $MarqImage  = $this->GetWebResource('img/image6.png');
           break;
     
        
        // You can edit line 4 below for the marquee 
        
      default:
      }
         if ($MarqImage <> "") {
          echo $begwrap . sprintf('<marquee direction="right" scrollamount="10"><img src="%s" class="MarqImage" /></marquee>', $MarqImage);
  
  echo '<marquee class="textmarquee" scrollamount="5" direction="left" behavior="scroll"/>Welcome to my Forum...This is a test forum for plugins and themes for Vanilla forums software...</marquee>';

   
    
        } // end if content statement
    } 
  
}
   
     public function Setup() {
        
    } 

 public function OnDisable() {
      /*
      RemoveFromConfig('Plugins.Marquee.Imm1');
      RemoveFromConfig('Plugins.Marquee.Imm2');
      RemoveFromConfig('Plugins.Marquee.Imm3');
      RemoveFromConfig('Plugins.Marquee.Imm4');
      RemoveFromConfig('Plugins.Marquee.Imm5');
      RemoveFromConfig('Plugins.Marquee.Imm6');
          */
   }
     

}

