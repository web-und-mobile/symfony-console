<?php
namespace WebUndMobile\SymfonyConsoleDemo;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\ProgressBar;

/**
 * Dispatch
 */
class Dispatch extends SymfonyCommand
{
    /**
     * Generate passwords
     *
     * @access protected
     * @param Symfony\Component\Console\Input\InputInterface
     * @param Symfony\Component\Console\Output\OutputInterface
     */
    protected function generatePasswords(InputInterface $input, OutputInterface $output)
    {
        $hashed_passwords = [''];
        $count = intval($input->getOption('count'));

        //$progressBar = new ProgressBar($output, $count);
        //$progressBar->setFormat('normal');
        //$progressBar->start();

        for ($i = 1; $i <= $count; $i++) {
            $password = bin2hex(random_bytes(32));
            $hashed_passwords[] = password_hash(
                $password,
                PASSWORD_BCRYPT,
                ['cost' => 8]
            );

            //usleep(500000);
            //$progressBar->advance();
        }
        //$progressBar->finish();
        $output->writeln($hashed_passwords);
    }
}
