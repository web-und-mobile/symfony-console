<?php
namespace WebUndMobile\SymfonyConsoleDemo\Commands;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use WebUndMobile\SymfonyConsoleDemo\Dispatch;

/**
 * Generate Passwords Command
 */
class GeneratePasswordsCommand extends Dispatch
{
    /**
     * Configure command
     *
     * @access public
     */
    public function configure()
    {
        $this->setName('generate:passwords');
        $this->setDescription('Generate passwords');
        $this->setHelp('This command generates hashed passwords using the CRYPT_BLOWFISH algorithm.');
        $this->addOption(
            'count',
            'c',
            InputOption::VALUE_OPTIONAL,
            'Number of passwords to generate',
            5
        );
    }

    /**
     * Execute business logic
     *
     * @access public
     * @param Symfony\Component\Console\Input\InputInterface
     * @param Symfony\Component\Console\Output\OutputInterface
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->generatePasswords($input, $output);
    }
}
