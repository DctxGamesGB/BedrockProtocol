<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
 */

declare(strict_types=1);

namespace pocketmine\network\mcpe\protocol\types;

use pocketmine\network\mcpe\protocol\types\inventory\InventoryTransactionChangedSlotsHack;
use pocketmine\network\mcpe\protocol\types\inventory\UseItemTransactionData;

final class ItemInteractionData{

	private int $requestId;
	/** @var InventoryTransactionChangedSlotsHack[] */
	private array $requestChangedSlots;
	private UseItemTransactionData $transactionData;

	/**
	 * @param InventoryTransactionChangedSlotsHack[] $requestChangedSlots
	 */
	public function __construct(int $requestId, array $requestChangedSlots, UseItemTransactionData $transactionData){
		$this->requestId = $requestId;
		$this->requestChangedSlots = $requestChangedSlots;
		$this->transactionData = $transactionData;
	}

	public function getRequestId() : int{
		return $this->requestId;
	}

	/**
	 * @return InventoryTransactionChangedSlotsHack[]
	 */
	public function getRequestChangedSlots() : array{
		return $this->requestChangedSlots;
	}

	public function getTransactionData() : UseItemTransactionData{
		return $this->transactionData;
	}

}
