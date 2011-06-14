<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class CRMConfig
{
  static $instance = false;

  protected $config_file = false;
  protected $config      = false;

  /**
   * Get current instance
   *
   * @return CRMConfig
   */
  static public function getInstance()
  {
    if(!self::$instance)
    {
      self::$instance = new CRMConfig();
    }

    return self::$instance;
  }

  /**
   * CRMConfig constructor
   *
   * @return void
   */
  public function __construct()
  {
    // parse config
    $this->parseConfigFile();
  }

  /**
   * Select config file
   *
   * @return void
   */
  protected function getConfigFile()
  {
    if(!$this->config_file)
    {
      $this->config_file = __DIR__ . '/../config/crm.yml';
    }

    return $this->config_file;
  }

  /**
   * Parse config file
   */
  protected function parseConfigFile()
  {
    if(!file_exists($this->getConfigFile()))
    {
      file_put_contents($this->getConfigFile(), '');
    }

    $yaml         = new sfYamlParser();
    $this->config = $yaml->parse(file_get_contents($this->getConfigFile()));
  }

  /**
   * Define object -> string convertion
   *
   * @return string Selected config file path
   */
  public function __toString() {
    return $this->config_file;
  }

  public function getAll()
  {
    return $this->config;
  }
}
