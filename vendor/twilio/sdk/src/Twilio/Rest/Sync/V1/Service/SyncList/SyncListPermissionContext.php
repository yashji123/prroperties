<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Sync
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Sync\V1\Service\SyncList;

use Twilio\Exceptions\TwilioException;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;


class SyncListPermissionContext extends InstanceContext
    {
    /**
     * Initialize the SyncListPermissionContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the [Sync Service](https://www.twilio.com/docs/sync/api/service) with the Sync List Permission resource to delete.
     * @param string $listSid The SID of the Sync List with the Sync List Permission resource to delete. Can be the Sync List resource's `sid` or its `unique_name`.
     * @param string $identity The application-defined string that uniquely identifies the User's Sync List Permission resource to delete.
     */
    public function __construct(
        Version $version,
        $serviceSid,
        $listSid,
        $identity
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'serviceSid' =>
            $serviceSid,
        'listSid' =>
            $listSid,
        'identity' =>
            $identity,
        ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid)
        .'/Lists/' . \rawurlencode($listSid)
        .'/Permissions/' . \rawurlencode($identity)
        .'';
    }

    /**
     * Delete the SyncListPermissionInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->version->delete('DELETE', $this->uri);
    }


    /**
     * Fetch the SyncListPermissionInstance
     *
     * @return SyncListPermissionInstance Fetched SyncListPermissionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): SyncListPermissionInstance
    {

        $payload = $this->version->fetch('GET', $this->uri, [], []);

        return new SyncListPermissionInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['listSid'],
            $this->solution['identity']
        );
    }


    /**
     * Update the SyncListPermissionInstance
     *
     * @param bool $read Whether the identity can read the Sync List and its Items. Default value is `false`.
     * @param bool $write Whether the identity can create, update, and delete Items in the Sync List. Default value is `false`.
     * @param bool $manage Whether the identity can delete the Sync List. Default value is `false`.
     * @return SyncListPermissionInstance Updated SyncListPermissionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(bool $read, bool $write, bool $manage): SyncListPermissionInstance
    {

        $data = Values::of([
            'Read' =>
                Serialize::booleanToString($read),
            'Write' =>
                Serialize::booleanToString($write),
            'Manage' =>
                Serialize::booleanToString($manage),
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new SyncListPermissionInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['listSid'],
            $this->solution['identity']
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Sync.V1.SyncListPermissionContext ' . \implode(' ', $context) . ']';
    }
}