<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%currency}}`.
 */
class m190903_084518_create_currency_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%currency}}', [
            'id' => $this->primaryKey()->unsigned(),
            'code' => $this->string(3)->notNull()->unique(),
            'sign_format' => $this->string(45)->notNull(),
        ]);
        $currencies = $this->_getCurrency();
        $this->batchInsert('currency', ['code','sign_format'], $currencies);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%currency}}');
    }
    
    private function _getCurrency(){
        return [
            ['AUD' , 'A$ [price]'],
            ['BGN' , '[price] лв.'],
            ['BRL' , 'R$ [price]'],
            ['CAD' , 'C$ [price]'],
            ['CHF' , '[price] CHF'],
            ['CZK' , 'Kč [price]'],
            ['DKK' , 'dkr [price]'],
            ['EUR' , '€ [price]'],
            ['GBP' , '£ [price]'],
            ['HRK' , '[price] kn'],
            ['HUF' , 'Ft [price]'],
            ['JPY' , '¥ [price]'],
            ['KRW' , '₩ [price]'],
            ['NOK' , 'nkr [price]'],
            ['PLN' , '[price] zł'],
            ['RUB' , '[price] руб'],
            ['SEK' , 'skr [price]'],
            ['TRY' , '[price] TL'],
            ['USD' , '$ [price]'],
        ];
    }

}
