<?php
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AllCommand extends Command
{
    protected $commandName = 'create:all';
    protected $commandDescription = "Creates view model controller and files in vue.";

    protected $commandArgumentName = "name";
    protected $commandArgumentDescription = "Route name argument";

    protected function configure()
    {
        $this
            ->setName($this->commandName)
            ->setDescription($this->commandDescription)
            ->addArgument(
                $this->commandArgumentName,
                InputArgument::OPTIONAL,
                $this->commandArgumentDescription
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("All files created successfully!");
        return 1;
    }
}