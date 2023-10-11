<?php

namespace Shanginn\TelegramBotApiBindings\Types;

/**
 * This object represents a point on the map.
 */
class Location implements TypeInterface
{
    /**
     * @param float      $longitude            Longitude as defined by sender
     * @param float      $latitude             Latitude as defined by sender
     * @param float|null $horizontalAccuracy   Optional. The radius of uncertainty for the location, measured in meters; 0-1500
     * @param int|null   $livePeriod           Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
     * @param int|null   $heading              Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
     * @param int|null   $proximityAlertRadius Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
     */
    public function __construct(
        public float $longitude,
        public float $latitude,
        public ?float $horizontalAccuracy = null,
        public ?int $livePeriod = null,
        public ?int $heading = null,
        public ?int $proximityAlertRadius = null,
    ) {
    }

    public static function fromResponseResult(array $result): self
    {
        $requiredFields = [
            'longitude',
            'latitude',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class %s missing some fields from the result array: %s', static::class, implode(', ', $missingFields)));
        }

        return new self(
            longitude: $result['longitude'],
            latitude: $result['latitude'],
            horizontalAccuracy: $result['horizontal_accuracy'] ?? null,
            livePeriod: $result['live_period'] ?? null,
            heading: $result['heading'] ?? null,
            proximityAlertRadius: $result['proximity_alert_radius'] ?? null,
        );
    }
}
