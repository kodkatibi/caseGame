<?php

class func
{

    protected $reelSets;
    protected $winnerSlot;

    public function makeReels()
    {

        for ($i = 0; $i < 50; $i++) {
            $this->reelSets[] = $i;
        }
        return $this->reelSets;
    }

    public function makeWinnerSlot()
    {
        $reels = $this->makeReels();

        for ($i = 0; $i < 4; $i++) {
            for ($j=0;$j<3;$j++){
                $this->winnerSlot[$i.'. reel'][] = $reels[rand(0, 49)]%6;
            }
        }
        return $this->winnerSlot;

    }
}