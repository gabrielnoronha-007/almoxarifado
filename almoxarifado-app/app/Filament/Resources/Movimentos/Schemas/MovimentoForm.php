<?php

namespace App\Filament\Resources\Movimentos\Schemas;

use Filament\Schemas\Schema;

class MovimentoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // TROQUE O TextInput POR Select AQUI:
                Select::make('produto_id')
                    ->label('produto')
                    ->relationship(name:'produto', titleAttribute: 'nome')
                    ->searchable() // Permite pesquisar pelo nome
                    ->preload() // Carregar a lista automaticamente
                    ->required(),

                //xtInput::make('produto_id')
                 // ->required()
                   //>numeric(),
            ]);
    }
}


