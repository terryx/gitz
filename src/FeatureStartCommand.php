<?php
/**
 * Created by PhpStorm.
 * User: terry
 * Date: 29/7/17
 * Time: 1:03 AM
 */

namespace Gitz;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Cz\Git\GitRepository;

class FeatureStartCommand extends Command
{
    public function configure()
    {
        $this->setName('feature')
            ->setDescription('Start a feature branch')
            ->addArgument('name', InputArgument::REQUIRED, 'Branch name');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $repo = new GitRepository(getcwd());
        print_r(getcwd());
        var_dump($repo->getCurrentBranchName());
        $message = 'Hello, ' . $input->getArgument('name');

        $output->writeln("<info>{$message}</info>");
    }
}
