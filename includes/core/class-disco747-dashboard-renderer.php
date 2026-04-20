<?php

class Disco747DashboardRenderer {

    public function renderDashboardCalendar() {
        $today = date('Y-m-d');
        $events = $this->getEvents();

        foreach ($events as $event) {
            if ($event['date'] === $today) {
                $this->renderFullDetails($event);
            } else if ($this->isDateAllowed($event['date'])) {
                $this->renderDot($event['date']);
            }
        }
    }

    private function getEvents() {
        // Mock events for demonstration
        return [
            ['date' => '2026-04-20', 'details' => 'Event 1 details'],
            ['date' => '2026-04-21', 'details' => 'Event 2 details'],
            ['date' => '2026-04-22', 'details' => 'Event 3 details'],
        ];
    }

    private function renderFullDetails($event) {
        echo "Full details for today's event: " . $event['details'] . "\n";
    }

    private function renderDot($date) {
        echo "Dot for allowed date: $date\n";
    }

    private function isDateAllowed($date) {
        // Logic to check if the date is allowed
        return true;
    }
}

?>