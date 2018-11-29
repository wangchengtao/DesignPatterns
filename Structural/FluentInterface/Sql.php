<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/29
 * Time: 22:43
 */

namespace DesignPatterns\Structural\FluentInterface;


class Sql
{
    private $from = [];

    private $fields = [];

    private $where = [];

    public function select(array $fields): Sql
    {
        $this->fields = $fields;

        return $this;
    }

    public function from(string $table, string $alias): Sql
    {
        $this->from[] = $table . ' AS ' . $alias;

        return $this;
    }

    public function where(string $conditions): Sql
    {
        $this->where[] = $conditions;

        return $this;
    }

    public function __toString()
    {
        return sprintf(
                'SELECT %s FROM %s WHERE %s',
                join(', ', $this->fields),
                join(', ', $this->from),
                join(' AND ', $this->where)
            );
    }
}