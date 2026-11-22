<?php

namespace Jusce\PilotoTecnicas3Persist\Model;

use CategoriaRepository;
use DateTime;
use Doctrine\ORM\Mapping;

#[Mapping\Entity]
#[Mapping\Table(name: 'evento')]
class Evento
{
    #[Mapping\Id]
    #[Mapping\GeneratedValue]
    #[Mapping\Column(type: 'integer')]
    private int $id;

    #[Mapping\Column(type: 'string', length: 255, nullable: false)]
    private string $nome;

    #[Mapping\Column(type: 'text', nullable: true)]
    private ?string $descricao = null;

    #[Mapping\Column(type: 'string', length: 255, nullable: false)]
    private string $local;

    #[Mapping\Column(type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private ?float $valor = null;

    #[Mapping\ManyToOne(targetEntity: Categoria::class)]
    #[Mapping\JoinColumn(name: 'categoria_id', referencedColumnName: 'id', nullable: false)]
    private Categoria $categoria;

    #[Mapping\Column(type: 'datetime', nullable: false)]
    private DateTime $data;
}
